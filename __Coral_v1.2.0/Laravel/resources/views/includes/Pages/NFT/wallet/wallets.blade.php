@php
$wallets = [
    [
        'img' => 'assets/images/wallet/MetaMask_Fox.svg', 
        'title' => 'MetaMask', 
        'desc' => "Learn about how to get the wallet and much more clicking", 
    ],
    [
        'img' => 'assets/images/wallet/aave.svg', 
        'title' => 'Aave', 
        'desc' => "Learn about how to get the wallet and much more clicking", 
    ],
    [
        'img' => 'assets/images/wallet/Airswap.svg', 
        'title' => 'Airswap', 
        'desc' => "Learn about how to get the wallet and much more clicking", 
    ],
    [
        'img' => 'assets/images/wallet/Compound.svg', 
        'title' => 'Compound', 
        'desc' => "Learn about how to get the wallet and much more clicking", 
    ],
    [
        'img' => 'assets/images/wallet/ddexsvg.svg', 
        'title' => 'DDEX', 
        'desc' => "Learn about how to get the wallet and much more clicking", 
    ],
    [
        'img' => 'assets/images/wallet/defi-saver.svg', 
        'title' => 'Defi Saver', 
        'desc' => "Learn about how to get the wallet and much more clicking", 
    ],
    [
        'img' => 'assets/images/wallet/dYdX.svg', 
        'title' => 'DYDX', 
        'desc' => "Learn about how to get the wallet and much more clicking", 
    ],
    [
        'img' => 'assets/images/wallet/idex.svg', 
        'title' => 'IDEX', 
        'desc' => "Learn about how to get the wallet and much more clicking", 
    ],
    [
        'img' => 'assets/images/wallet/kyber.svg', 
        'title' => 'Kyber', 
        'desc' => "Learn about how to get the wallet and much more clicking", 
    ],
    [
        'img' => 'assets/images/wallet/maker.svg', 
        'title' => 'Maker', 
        'desc' => "Learn about how to get the wallet and much more clicking", 
    ],
    [
        'img' => 'assets/images/wallet/nuo.svg', 
        'title' => 'NUO', 
        'desc' => "Learn about how to get the wallet and much more clicking", 
    ],
    [
        'img' => 'assets/images/wallet/PoolTogether.svg', 
        'title' => 'PoolTogether', 
        'desc' => "Learn about how to get the wallet and much more clicking", 
    ],
    [
        'img' => 'assets/images/wallet/sablier.svg', 
        'title' => 'Sablier', 
        'desc' => "Learn about how to get the wallet and much more clicking", 
    ],
    [
        'img' => 'assets/images/wallet/set.svg', 
        'title' => 'Set', 
        'desc' => "Learn about how to get the wallet and much more clicking", 
    ],
    [
        'img' => 'assets/images/wallet/uniswap.svg', 
        'title' => 'Uniswap', 
        'desc' => "Learn about how to get the wallet and much more clicking", 
    ],
    [
        'img' => 'assets/images/wallet/zerion.svg', 
        'title' => 'Zerion', 
        'desc' => "Learn about how to get the wallet and much more clicking", 
    ]
];
@endphp

@foreach ($wallets as $item)
    <div class="col-lg-3 col-md-4 col-sm-2 col-12">
        <div class="wallet position-relative overflow-hidden rounded shadow">
            <div class="bg-gradient-primary p-4"></div>
            <div class="position-relative">
                <div class="position-absolute top-0 start-50 translate-middle">
                    <img src="{{ asset($item['img']) }}" class="avatar avatar-small rounded-pill shadow-sm p-2 bg-light" alt="">
                </div>
                
                <div class="content text-center p-4">
                    <h5 class="mt-4 mb-0">{{ $item['title'] }}</h5>
                    <p class="text-muted mt-3 mb-0">{{ $item['desc'] }} <a href="javascript:void(0)" class="text-primary">here <i class="mdi mdi-arrow-right"></i></a></p>
                </div>
            </div>
        </div>
    </div>
@endforeach