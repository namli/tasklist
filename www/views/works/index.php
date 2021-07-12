<?php require 'views/layouts/main.php' ?>
<header class="mt-4 mb-4">
    <div class="container">
        <h1 class="h1 text-center">To Do List</h1>
    </div>
</header>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <?php foreach ($works as $index => $work) : ?>
                    <div class="card mt-2">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $work->name; ?></h5>
                            <p class="card-text"><?php echo $work->descr; ?></p>
                            <p class="card-text"><span class="fw-bold">Status: </span><?php echo $status[$work->status]; ?></p>
                            <a href="/works/edit?id=<?php echo $work->id; ?>" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-6">
                <a class="btn btn-block btn-success" href="/works/create">Create New </a>
            </div>
        </div>
    </div>
</section>

<?php require 'views/layouts/bottom.php' ?>