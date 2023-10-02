<div>
    <div class="row">
        <div class="col-md-3">
            @if ($category->brands)
            <div class="card">
                <div class="card-header"><h4>Brands</h4></div>
                <div class="card-body">
                    @foreach ($category->brands as $brandItem)
                        <label class="d-block">
                            <input wire:model.live="brandInputs"  type="checkbox"  value="{{ $brandItem->name }} "  /> {{ $brandItem->name }}
                        </label>
                    @endforeach

                </div>
            </div>
            @endif

            <div class="card mt-3">
                <div class="card-header"><h4>Price</h4></div>
                <div class="card-body">
                        <label class="d-block">
                            <input wire:model.live="priceInput" name="priceSort"  type="radio"  value="high-to-low"  /> High To Low
                        </label>
                        <label class="d-block">
                            <input wire:model.live="priceInput" name="priceSort"  type="radio"  value="low-to-high"  /> High To High
                        </label>
                </div>
            </div>
        </div>
        <div class="col-md-9">



            <div class="row">
                @forelse ($products as $productItem)
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="product-card-img">
                            @if ($productItem->quantity>0)
                            <label class="stock bg-success">In Stock</label>

                            @else
                            <label class="stock bg-success">Out of Stock</label>

                            @endif

                            @if ($productItem->productImages->count() > 0)
                            <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">

                                <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}">
                            </a>

                            @endif
                        </div>
                        <div class="product-card-body">
                            <p class="product-brand">{{ $productItem->brand }}</p>
                            <h5 class="product-name">
                            <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                {{ $productItem->name }}
                            </a>
                            </h5>
                            <div>
                                <span class="selling-price">
                                    {{ number_format($productItem->selling_price,0,'.','.').'đ'  }}
                                </span>
                                <span class="original-price">
                                    {{ number_format($productItem->original_price,0,'.','.').'đ'  }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-md-12">
                        <h5>No Products Available {{ $category->name }}</h5>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
