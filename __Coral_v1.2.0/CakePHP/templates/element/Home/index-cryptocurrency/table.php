<?php
$tables = [
    [
        'img' => 'assets/images/coin/Bitcoin-BTC.png', 
        'title' => 'Bitcoin',
        'symbol' => 'BTC',
        'price' => '$34587',
        'percentage' => '-2.5%',
        'dollar' => '-$745',
        'marketcap' => '$725,354M',
        'btn' => 'Trade',
        'class' => 'text-danger',
    ],
    [
        'img' => 'assets/images/coin/Ethereum-ETH.png', 
        'title' => 'Ethereum',
        'symbol' => 'ETH',
        'price' => '$216',
        'percentage' => '+.264%',
        'dollar' => '+$.264',
        'marketcap' => '$11,100M',
        'btn' => 'Trade',
        'class' => 'text-success',
    ],
    [
        'img' => 'assets/images/coin/Avalanche-AVAX.png', 
        'title' => 'Avalanche',
        'symbol' => 'AVAX',
        'price' => '$452',
        'percentage' => '-1.9%',
        'dollar' => '-$1.9',
        'marketcap' => '$45,785M',
        'btn' => 'Trade',
        'class' => 'text-danger',
    ],
    [
        'img' => 'assets/images/coin/BNB-BNB.png', 
        'title' => 'BNB',
        'symbol' => 'BNB',
        'price' => '$154',
        'percentage' => '+1.05%',
        'dollar' => '+$1.05',
        'marketcap' => '$85,478M',
        'btn' => 'Trade',
        'class' => 'text-success',
    ],
    [
        'img' => 'assets/images/coin/Cardano-ADA.png', 
        'title' => 'Cardano',
        'symbol' => 'ADA',
        'price' => '$854',
        'percentage' => '+1.705%',
        'dollar' => '+$1.705',
        'marketcap' => '$112,452M',
        'btn' => 'Trade',
        'class' => 'text-success',
    ],
    [
        'img' => 'assets/images/coin/Dai-DAI.png', 
        'title' => 'Dai',
        'symbol' => 'DAI',
        'price' => '$548',
        'percentage' => '-3.2%',
        'dollar' => '-$3.2',
        'marketcap' => '$4,712M',
        'btn' => 'Trade',
        'class' => 'text-danger',
    ],
    [
        'img' => 'assets/images/coin/Polkadot-DOT.png', 
        'title' => 'Polkadot',
        'symbol' => 'DOT',
        'price' => '$965',
        'percentage' => '+1.465%',
        'dollar' => '+$1.465',
        'marketcap' => '$487,552M',
        'btn' => 'Trade',
        'class' => 'text-success',
    ],
    [
        'img' => 'assets/images/coin/Shiba-Inu-SHIB.png', 
        'title' => 'Shiba Inu',
        'symbol' => 'SHIB',
        'price' => '$4875',
        'percentage' => '-1.08%',
        'dollar' => '-$1.08',
        'marketcap' => '$55,221M',
        'btn' => 'Trade',
        'class' => 'text-danger',
    ]
];
?>

<?php foreach ($tables as $item): ?>
    <tr>
        <th class="p-3">
            <div class="align-items-center">
                <img src="<?= $this->Url->build('/' . h($item['img'])) ?>" class="me-2 avatar avatar-ex-small" alt="">
                <p class="mb-0 d-inline text-dark fw-normal h6"><?= h($item['title']) ?></p>
            </div>
        </th>
        <td class="p-3 text-muted fw-medium"><?= h($item['symbol']) ?></td>
        <td class="p-3 text-dark"><?= h($item['price']) ?></td>
        <td class="<?= h($item['class']) ?> p-3"><?= h($item['percentage']) ?></td>
        <td class="<?= h($item['class']) ?> p-3"><?= h($item['dollar']) ?></td>
        <td class="text-muted p-3"><?= h($item['marketcap']) ?></td>
        <td class="p-3 text-end"><a href="javascript:void(0)" class="btn btn-sm btn-primary"><?= h($item['btn']) ?></a></td>
    </tr>
<?php endforeach; ?>