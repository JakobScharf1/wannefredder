<?php
$counters = [
    [
        'target' => '11124',
        'number' => '8054',
        'symbol' => '+',
        'title' => 'Customers',
    ],
    [
        'target' => '25',
        'number' => '1',
        'symbol' => '+',
        'title' => 'Awards',
    ],
    [
        'target' => '9',
        'number' => '1',
        'symbol' => '+',
        'title' => 'Countries',
    ],
];
?>

<?php foreach ($counters as $item): ?>
    <div class="col-4 py-3">
        <div class="counter-box text-center">
            <h1 class="mb-0 fw-semibold"><span class="counter-value" data-target="<?php echo $item['target']; ?>"><?php echo $item['number']; ?></span><?php echo $item['symbol']; ?></h1>
            <h6 class="counter-head text-muted fw-normal"><?php echo $item['title']; ?></h6>
        </div>
    </div>
<?php endforeach; ?>