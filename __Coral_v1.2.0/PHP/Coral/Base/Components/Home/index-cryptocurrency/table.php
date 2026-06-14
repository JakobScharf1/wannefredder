<?php
$tables = [
    [
        'img' => '/images/coin/Bitcoin-BTC.png', 
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
        'img' => '/images/coin/Ethereum-ETH.png', 
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
        'img' => '/images/coin/Avalanche-AVAX.png', 
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
        'img' => '/images/coin/BNB-BNB.png', 
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
        'img' => '/images/coin/Cardano-ADA.png', 
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
        'img' => '/images/coin/Dai-DAI.png', 
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
        'img' => '/images/coin/Polkadot-DOT.png', 
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
        'img' => '/images/coin/Shiba-Inu-SHIB.png', 
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
                <img src="<?php echo $static_url, $item['img']; ?>" class="me-2 avatar avatar-ex-small" alt="">
                <p class="mb-0 d-inline text-dark fw-normal h6"><?php echo $item['title']; ?></p>
            </div>
        </th>
        <td class="p-3 text-muted fw-medium"><?php echo $item['symbol']; ?></td>
        <td class="p-3 text-dark"><?php echo $item['price']; ?></td>
        <td class="<?php echo $item['class']; ?> p-3"><?php echo $item['percentage']; ?></td>
        <td class="<?php echo $item['class']; ?> p-3"><?php echo $item['dollar']; ?></td>
        <td class="text-muted p-3"><?php echo $item['marketcap']; ?></td>
        <td class="p-3 text-end"><a href="javascript:void(0)" class="btn btn-sm btn-primary"><?php echo $item['btn']; ?></a></td>
    </tr>
<?php endforeach; ?>