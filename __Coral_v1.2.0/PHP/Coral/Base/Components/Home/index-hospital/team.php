<?php
$teams = [
    [
        'img' => '/images/team/01.jpg',
        'name' => 'Jack John',
        'title' => 'Doctor',
    ],
    [
        'img' => '/images/team/02.jpg',
        'name' => 'Jeremiah Green',
        'title' => 'Doctor',
    ],
    [
        'img' => '/images/team/03.jpg',
        'name' => 'Christina Vasquez',
        'title' => 'Doctor',
    ],
    [
        'img' => '/images/team/04.jpg',
        'name' => 'Lillian Boldt',
        'title' => 'Doctor',
    ]
];
?>

<?php foreach ($teams as $item): ?>
    <div class="col-lg-3 col-md-6 col-12">
        <div class="card team team-primary shadow text-center mb-5">
            <div class="card-img team-image d-inline-block mx-auto rounded overflow-hidden">
                <img src="<?php echo $static_url, $item['img']; ?>" class="img-fluid" alt="">

                <ul class="list-unstyled team-social mb-0">
                    <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="facebook" class="icons fea-social"></i></a></li>
                    <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="instagram" class="icons fea-social"></i></a></li>
                    <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="twitter" class="icons fea-social"></i></a></li>
                </ul><!--end icon-->
            </div>

            <div class="content bg-white mx-4 p-4 z-1 rounded shadow">
                <a href="" class="text-dark h5 mb-0 title"><?php echo $item['name']; ?></a>
                <h6 class="text-muted mb-0 fw-normal"><?php echo $item['title']; ?></h6>
            </div>
        </div>
    </div>
<?php endforeach; ?>