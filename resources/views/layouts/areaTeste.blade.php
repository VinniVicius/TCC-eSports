@extends('templates.main')
@section('content')
<section class="container-fluid min-vh-100 bg-area-teste">
    <article class="container dobra-2">
        <div class="container-lg py-4" style="max-width: 1340px;">
            <div class="row mx-2 pb-4">
                <div class="col bg-area-teste-header rounded-lg p-3">
                    <h3>Título</h3>
                    <p class="lead">
                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi nostrum facilis itaque eveniet exercitationem, tenetur aliquid sit architecto eum obcaecati ipsum in quam, eligendi deserunt debitis vel cum! Et, rem.
                    </p>
                </div>
            </div>
            <!-- Cards -->
            <div class="row row-cols-1 row-cols-md-3 px-2 text-center">
                <div class="col mb-4">
                    <div class="card card-hover">
                        <img src="https://images.unsplash.com/photo-1563233305-f952ee18de63?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1920" class="card-img-top" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Aim Tracking</h5>
                            <!--<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, ut fuga vel excepturi distinctio eius.</p>-->
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card card-hover">
                        <img src="https://source.unsplash.com/bF2vsubyHcQ/1920x1080" class="card-img-top" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Aim Trainer</h5>
                            <!--<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, ut fuga vel excepturi distinctio eius.</p>-->
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card card-hover">
                        <img src="https://images.unsplash.com/photo-1566514883564-c4cdfa535113?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1920" class="card-img-top" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Título</h5>
                            <!--<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, ut fuga vel excepturi distinctio eius.</p>-->
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card card-hover">
                        <img src="https://images.unsplash.com/photo-1564718944129-22ad7478b856?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1920" class="card-img-top" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Título</h5>
                            <!--<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, ut fuga vel excepturi distinctio eius.</p>-->
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Cards -->
    </article>
</section>
@endsection