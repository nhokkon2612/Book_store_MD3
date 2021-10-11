<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart($id)
    {
        $book = Book::with('publisher')->where('id', '=', $id)->first();
        $carts = session('cart');
        if (!$carts) {
            $carts = [
                $id => [
                    'name' => $book->name,
                    'publisher' => $book->publisher->name,
                    'in_stoke' => $book->quantity_now,
                    'image' => $book->image,
                    'price' => $book->price,
                    'quantity' => 1,
                ],
            ];
        } else {
            if (!isset(session('cart')[$id])) {
                $carts[$id] = [
                    'name' => $book->name,
                    'publisher' => $book->publisher->name,
                    'in_stoke' => $book->quantity_now,
                    'image' => $book->image,
                    'price' => $book->price,
                    'quantity' => 1,
                ];
            } else {
                $carts[$id] = [
                    'name' => $book->name,
                    'publisher' => $book->publisher->name,
                    'in_stoke' => $book->quantity_now,
                    'image' => $book->image,
                    'price' => $book->price,
                    'quantity' => session('cart')[$id]['quantity'] + 1,
                ];
            }
        }
        Session::put('cart', $carts);
        Session::put("cart", $carts);
        $cart = \session('cart');
        foreach ($cart as $key => $book) {
            $allTotal[$key] = $book['quantity'] * $book['price'];
        }
        $allTot = array_sum($allTotal);
        session::put('allTotal', $allTot);
        alert()->success('Thêm giỏ hàng thành công', 'Lựa chọn thêm sách');
        return redirect()->back();
    }

    public function showCart()
    {
        $booksInCart = session('cart');
        return view('shop.showcart', compact('booksInCart'));
    }

    public function update(Request $request)
    {
        $cart = session('cart');
        $updates = $request->quantity;
        foreach ($updates as $key => $update) {
            $cart[$key]['quantity'] = $update[0];
            $cart[$key]['total'] = $update[0] * $cart[$key]['price'];
            $allTotal[$key] = $update[0] * $cart[$key]['price'];
        }
        $allTot = array_sum($allTotal);
        session::put('allTotal', $allTot);
        Session::put("cart", $cart);
        return redirect()->route('shop.showCart');
    }

    public function checkout()
    {
        dd(session('customer-info'));
    }
}
