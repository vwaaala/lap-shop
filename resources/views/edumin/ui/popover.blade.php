@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Popover</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bootstrap popover</h4>
                </div>
                <div class="card-body">

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam laborum dolorum culpa a maiores
                        officia ab. Cumque necessitatibus voluptates soluta, ullam numquam nulla. Et a architecto
                        veritatis sint, autem cupiditate
                        iure illo pariatur eum, praesentium numquam ea quaerat ipsam? Corrupti nobis illo itaque quae,
                        qui numquam vero ipsa, reiciendis sit repudiandae molestiae natus vel voluptatibus
                        exercitationem ducimus neque harum ad,
                        commodi excepturi repellat eos fugiat minus eius. Doloremque itaque repudiandae saepe quia
                        temporibus? Vitae, reprehenderit aliquam facilis qui at quis provident in maiores illo laborum,
                        voluptatem recusandae cupiditate
                        nemo. Nulla iusto ad consequatur reprehenderit quod accusamus, vitae, blanditiis quae ut tenetur
                        nobis animi dolorum consectetur dignissimos amet illo provident nam obcaecati eligendi molestias
                        tempora? Ad nam nobis
                        eaque consequatur tempore tenetur eius ipsum reprehenderit dignissimos inventore. Id recusandae
                        nemo dicta rerum. Distinctio itaque, veniam dolore inventore aliquid assumenda neque. Deserunt!
                    </p>
                    <div class="bootstrap-popover-wrapper">
                        <div class="bootstrap-popover d-inline-block">
                            <button type="button" class="btn btn-primary btn-sm px-4 " data-bs-container="body"
                                data-bs-toggle="popover" data-bs-placement="left"
                                data-bs-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor."
                                title="Popover in Left">Left</button>
                        </div>
                        <div class="bootstrap-popover d-inline-block">
                            <button type="button" class="btn btn-primary btn-sm px-4 " data-bs-container="body"
                                data-bs-toggle="popover" data-bs-placement="top"
                                data-bs-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor."
                                title="Popover in Top">Top</button>
                        </div>
                        <div class="bootstrap-popover d-inline-block">
                            <button type="button" class="btn btn-primary btn-sm px-4 " data-bs-container="body"
                                data-bs-toggle="popover" data-bs-placement="bottom"
                                data-bs-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor."
                                title="Popover in Bottom">Bottom</button>
                        </div>
                        <div class="bootstrap-popover d-inline-block">
                            <button type="button" class="btn btn-primary btn-sm px-4 " data-bs-container="body"
                                data-bs-toggle="popover" data-bs-placement="right"
                                data-bs-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor."
                                title="Popover in Right">Right</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection