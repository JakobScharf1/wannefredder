<?php
$counters = [
    [
        'icon' => 'check-circle',
        'target' => '49',
        'number' => '1',
        'symbol' => '+',
        'title' => 'Yoga Courses',
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
    <div class="col-md-4 col-6 mt-4 pt-3">
        <div class="counter-box">
            <div class="position-relative">
                <i data-feather="<?php echo $item['icon']; ?>" class="fea icon-lg mb-3 text-primary"></i>

                <div class="position-absolute top-0 translate-middle p-3 bg-soft-primary rounded-circle"></div>
            </div>
            <h3 class="mb-0 text-dark fw-semibold"><span class="counter-value" data-target="<?php echo $item['target']; ?>"><?php echo $item['number']; ?></span><?php echo $item['symbol']; ?></h3>
            <h6 class="counter-head text-muted fw-medium mb-0"><?php echo $item['title']; ?></h6>
        </div>
    </div>
<?php endforeach; ?>