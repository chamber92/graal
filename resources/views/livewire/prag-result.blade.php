<div>
    @if($product = $this->data['product'] ?? null)
        <div>
            @isset($product['title'])
                <h3>{{ $product['title'] }}</h3>

            @endisset
        </div>
    @endif
</div>
