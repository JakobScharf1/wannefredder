<?php
$sliders = [
    [
        'img' => 'assets/images/coin/Bitcoin-BTC.png', 
        'title' => 'Bitcoin (BTC)',
        'price' => '$45762',
        'percentage' => '5.25%',
        'class' => 'success',
    ],
    [
        'img' => 'assets/images/coin/Ethereum-ETH.png', 
        'title' => 'Ethereum (ETH)',
        'price' => '$45762',
        'percentage' => '5.25%',
        'class' => 'danger',
    ],
    [
        'img' => 'assets/images/coin/Avalanche-AVAX.png', 
        'title' => 'Avalanche (AVAX)',
        'price' => '$45762',
        'percentage' => '5.25%',
        'class' => 'success',
    ],
    [
        'img' => 'assets/images/coin/BNB-BNB.png', 
        'title' => 'BNB (BNB)',
        'price' => '$45762',
        'percentage' => '5.25%',
        'class' => 'success',
    ],
    [
        'img' => 'assets/images/coin/Cardano-ADA.png', 
        'title' => 'Cardano (ADA)',
        'price' => '$45762',
        'percentage' => '5.25%',
        'class' => 'danger',
    ],
    [
        'img' => 'assets/images/coin/Dai-DAI.png', 
        'title' => 'Dai (DAI)',
        'price' => '$45762',
        'percentage' => '5.25%',
        'class' => 'danger',
    ],
    [
        'img' => 'assets/images/coin/Polkadot-DOT.png', 
        'title' => 'Polkadot (DOT)',
        'price' => '$45762',
        'percentage' => '5.25%',
        'class' => 'success',
    ],
    [
        'img' => 'assets/images/coin/Shiba-Inu-SHIB.png', 
        'title' => 'Shiba Inu (SHIB)',
        'price' => '$45762',
        'percentage' => '5.25%',
        'class' => 'danger',
    ]
];
?>

<?php foreach ($sliders as $item): ?>
    <div class="tiny-slide">
        <div class="position-relative overflow-hidden rounded shadow bg-white p-4 m-2">
            <div class="position-relative d-flex align-items-center justify-content-between z-1">
                <div class="d-flex align-items-center">
                    <img src="<?= $this->Url->build('/' . h($item['img'])) ?>" class="rounded-pill shadow bg-white avatar avatar-md-sm" alt="">
                    
                    <div class="ms-3">
                        <h6 class="mb-1"><a href="" class="text-dark link-title"><?= h($item['title']) ?></a></h6>
                        <h6 class="text-<?= h($item['class']) ?> small mb-0"><?= h($item['price']) ?></h6>
                    </div>
                </div>
                
                <div class="ms-2">
                    <span class="badge bg-<?= h($item['class']) ?> rounded-pill"><?= h($item['percentage']) ?></span>
                </div>
            </div>
            
            <div class="position-absolute top-50 start-100 translate-middle">
                <img src="<?= $this->Url->build('/' . h($item['img'])) ?>" class="avatar avatar-md-md opacity-10 me-5" alt="">
            </div>
        </div>
    </div>
<?php endforeach; ?>