<template>
    <div>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/home">Boolpress</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active mx-3" href="/home">Home</a></li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-primary" type="submit">
                            <a href="/login" class="text-white">Login</a>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Homepage Laravel Boolpress</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Benvenuto sulla più famosa alternativa a Wordpress</p>
                </div>
            </div>
        </header>
    </div>
</template>

<script>
export default {
    name: 'Header'
}
</script>

<style>

</style>