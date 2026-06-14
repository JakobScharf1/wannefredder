<?php
$counters = [
    [
        'icon' => 'check-circle',
        'target' => '49',
        'number' => '1',
        'symbol' => '+',
        'title' => 'Project Completed',
    ],
    [
        'icon' => 'coffee',
        'target' => '2461',
        'number' => '1',
        'symbol' => '+',
        'title' => 'Cup of Coffee',
    ],
    [
        'icon' => 'user-check',
        'target' => '99',
        'number' => '1',
        'symbol' => '%',
        'title' => 'Client Satisfaction',
    ],
];
?>

<?php foreach ($counters as $item): ?>
    <div class="col-4 py-3">
        <div class="counter-box text-center">
            <div class="position-relative d-flex justify-content-center">
                <i data-feather="<?php echo $item['icon']; ?>" class="fea icon-lg mb-3 text-primary"></i>

                <div class="position-absolute top-0 translate-middle p-3 bg-soft-primary rounded-circle"></div>
            </div>
            <h2 class="mb-0 text-dark fw-semibold"><span class="counter-value" data-target="<?php echo $item['target']; ?>"><?php echo $item['number']; ?></span><?php echo $item['symbol']; ?></h2>
            <h6 class="counter-head text-muted fw-medium mb-0"><?php echo $item['title']; ?></h6>
        </div>
    </div>
<?php endforeach; ?>