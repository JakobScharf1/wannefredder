<?php
$traders = [
    [
        'img' => 'assets/images/cpu.svg', 
        'title' => 'Buy & Sell Crypto',
        'desc' => 'Buy or sell Bitcoin, Ethereum, and other crypto assets with your credit card, debit card, or bank account.',
        'btn' => 'Buy Bitcoin'
    ],
    [
        'img' => 'assets/images/analytics.svg', 
        'title' => 'Trade Assets',
        'desc' => 'Discover new and innovative crypto assets with over 200 spot trading pairs and 25 margin trading pairs.',
        'btn' => 'View Exchange'
    ],
    [
        'img' => 'assets/images/exchange.svg', 
        'title' => 'Hedge with Coral Futures',
        'desc' => 'Trade Bitcoin, Ethereum, and other perpetual with up to 100x leverage on Coral Futures.',
        'btn' => 'Trade Futures'
    ],
    [
        'img' => 'assets/images/money.svg', 
        'title' => 'Earn Rewards for Trading',
        'desc' => 'Never miss an opportunity for a little competition. Join our latest campaigns to earn rewards.',
        'btn' => 'Join Competition'
    ]
];
?>

<?php foreach ($traders as $item): ?>
    <div class="col-lg-3 col-md-6">
        <div class="position-relative p-4 bg-white shadow rounded overflow-hidden">
            <div class="pe-4">
                <a href="javascript:void(0)" class="link-title h5 text-dark"><?= h($item['title']) ?></a>
                <p class="text-muted mb-3 mt-4"><?= h($item['desc']) ?></p>
                <a href="javascript:void(0)" class="btn btn-link primary"><?= h($item['btn']) ?> <i class="mdi mdi-arrow-right align-middle"></i></a>
            </div>
            <div class="position-absolute top-50 start-100 translate-middle z-0">
                <img src="<?= $this->Url->build('/' . h($item['img'])) ?>" class="avatar avatar-large opacity-25" alt="">
            </div>
        </div>
    </div>
<?php endforeach; ?>