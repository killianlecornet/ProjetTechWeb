@extends('layout')

@section('contenu')

    <div class="pb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
  
            <!-- Shopping cart table -->
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="border-0 bg-light">
                      <div class="p-2 px-3 text-uppercase">Product</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Price</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Quantity</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Remove</div>
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach (Cart::content() as $post)
                        <tr>
                            <th scope="row" class="border-0">
                            <div class="p-2">
                                <img src="http://www.cndp.fr/crdp-dijon/local/cache-vignettes/L540xH540/picto-barrer-d3f1b.png?1421925515" alt="" width="70" class="img-fluid rounded shadow-sm">
                                <div class="ml-3 d-inline-block align-middle">
                                <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{ $post->title }}</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: Watches</span>
                                </div>
                            </div>
                            </th>
                            <td class="border-0 align-middle"><strong>{{ $post->price }}</strong></td>
                            <td class="border-0 align-middle"><strong>1</strong></td>
                            <td class="border-0 align-middle"> 
                                <form action="{{ route('cart.destroy',$post->id) }}" method="POST">
                                    {{csrf_field()}}
                                    @method('DELETE')
                                    <button type="submit">Delet</button>
                                </form>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- End -->
          </div>
        </div>
        <center><a href="/videpanier" class="btn btn-danger">Vider tout le panier</a></center>
  
        
  @endsection