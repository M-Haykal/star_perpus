<div class="modal" id="detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Book</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card mb-4 mb-xl-0">
                            {{-- Cover buku --}}
                            <img class="img-account-profile" src="http://bootdey.com/img/Content/avatar/avatar1.png"
                                alt="">
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="card mb-4">
                            <div class="card-body">
                                {{-- Detail buku --}}
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Title: </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Masukkan judul</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Genre</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Masukkan Genre</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Created</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">30-4-2024</p>
                                    </div>
                                </div>
                                <hr>
                                {{-- Isi Buku --}}
                                <div class="row">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                                    {{-- part buku --}}
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body overflow-x">Placeholder content for this
                                                    accordion,
                                                    which is intended to demonstrate the <code>.accordion-flush</code>
                                                    class. This is the first item's accordion body.</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                                    {{-- part buku --}}
                                                    Accordion Item #2
                                                </button>
                                            </h2>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Placeholder content for this accordion,
                                                    which is intended to demonstrate the <code>.accordion-flush</code>
                                                    class. This is the second item's accordion body. Let's imagine this
                                                    being filled with some actual content.</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                                    {{-- part buku --}}
                                                    Accordion Item #3
                                                </button>
                                            </h2>
                                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Placeholder content for this accordion,
                                                    which is intended to demonstrate the <code>.accordion-flush</code>
                                                    class. This is the third item's accordion body. Nothing more
                                                    exciting happening here in terms of content, but just filling up the
                                                    space to make it look, at least at first glance, a bit more
                                                    representative of how this would look in a real-world application.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h1>Review</h1>
                    <div class="col-xl-8">
                        <div class="card mb-4 mt-3 mb-lg-0">
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush rounded-3">
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                                        <p class="mb-0">Name User: </p>
                                        <p class="mb-0">Ulasan</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                                        <p class="mb-0">Name User: </p>
                                        <p class="mb-0">Ulasan</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card mt-3 mb-lg-0">
                            <div class="card-header">
                                <h3>Review</h3>
                            </div>
                            <form action="" method="post" class="p-2">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Comentar</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                </div>
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-success" type="submit">Send Review</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                {{-- ketika button add to favorite diklik maka buku yang difavoritkan akan muncul di halaman favorite di file favorite --}}
                <button type="button" class="btn btn-success disabled">Add To Favorite</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
