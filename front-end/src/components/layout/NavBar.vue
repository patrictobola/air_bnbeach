<script setup>
const iconPath = new URL('/public/airbnb.png', import.meta.url)
</script>

<template>
    <nav class="navbar navbar-expand-lg">
        <div class="container d-none d-sm-flex d-md-none">

            <form class="d-flex flex-grow-1" role="search">
                <button class="btn btn-outline-success rounded-pill" type="submit">Search</button>
                <input class="form-control mx-1 rounded-pill" type="search" placeholder="Search" aria-label="Search">
            </form>
            <button class="btn btn-outline-success rounded-pill"><span class="fas fa-filter"></span></button>
        </div>
        <div class="container-fluid justify-content-between">
            <a href="#"><img :src="iconPath" alt="MainIcon"></a>
            <div class="">
                <a href="#">Soggiorni</a>
                <a href="#">Esperienze</a>
                <a href="#">Esperienze Online</a>
            </div>
            <!-- User buttons -->
            <div class="d-flex align-items-center">
                <a href="#"><b>Affitta con Airbnbeach</b></a>
                <a href="#"><span class="fas fa-globe"></span></a>
                <div>

                    <a href="#" id="user-btn" class="badge rounded-pill border border-dark-subtle">
                        <span class="fas fa-bars me-3"></span>
                        <span class="fas fa-user"></span>
                    </a>
                </div>

            </div>
        </div>

    </nav>
</template>

<style scoped>
img {
    height: 40px;
}

a {
    text-decoration: none;
    color: black;
    margin: 0 10px;
}

#user-btn {
    height: 40px;
    display: flex;
    align-items: center;

    & span {
        margin: 0 10px;
    }
}
</style>