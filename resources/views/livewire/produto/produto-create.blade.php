<div class="container">
    <div class="mt-5">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h4 style="text-align:center">Cadastro de produtos</h4>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='store'>
                            <div class="mb-3">
                                <label for="nome"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
