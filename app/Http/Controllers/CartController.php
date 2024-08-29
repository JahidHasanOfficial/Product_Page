

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    public function addToCart(Request $request)
    {
        $cartItem = Cart::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'color' => $request->color,
            'size' => $request->size,
            'price' => $request->price,
        ]);

        return response()->json(['cartItem' => $cartItem]);
    }

    public function updateCart(Request $request, $id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->update([
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        return response()->json(['cartItem' => $cartItem]);
    }

    public function showCart()
    {
        $cartItems = Cart::all();
        return view('cart.show', compact('cartItems'));
    }

    public function checkout()
    {
        // Save cart items to database or process the order
        Cart::truncate(); // Clear the cart
        return redirect()->route('products.index')->with('success', 'Order placed successfully!');
    }
}

