<script setup>
</script>

<script>
export default {
    data: () => ({
        text: "Aggiungi ospiti",
        from: null,
        to: null,
    }
    )
}
</script>

<template>
    <div class="container d-flex justify-content-center">

        <div class="search-bar-container d-flex">
            <form action="#" class="d-flex">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Dove</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                </div>
                <div class="">
                    <label for="check-in" class="form-label">Check-in</label>
                    <input id="check-in" class="form-control" type="text" value="Aggiungi date"
                        aria-label="readonly input example" readonly>
                </div>
                <div class="">
                    <label for="check-out" class="form-label">Check-out</label>
                    <input id="check-out" class="form-control" type="text" value="Aggiungi date"
                        aria-label="readonly input example" readonly>
                </div>
                <!-- <div class="">
                    <label for="guests" class="form-control">Chi</label>
                    <input id="guests" class="form-control" type="text" value="Aggiungi ospiti"
                        aria-label="readonly input example" readonly>
                </div> -->

                <a href="#" id="guest">
                    <div class="h-100 w-100 d-flex flex-column justify-content-center">

                        <span>Chi<br></span>
                        <span>{{ text }}</span>
                    </div>
                </a>


            </form>
        </div>
    </div>
</template>

<style scoped>
* {
    font-size: 0.8rem;
}

#guest {
    min-width: 100px;
}

.search-bar-container {
    max-width: 700px;
    width: 700px;
    background-color: red;
    height: 60px;
    border-radius: calc(80px / 2)
}

a {
    text-decoration: none;
    color: black;

    & :hover {
        background-color: gray;
    }
}
</style>