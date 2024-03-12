<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios';

const tags = ref([]);

onMounted(() => {
    axios
        .get('http://127.0.0.1:8000/api/tags')
        .then((response) => {
            tags.value = response.data
        })
})
</script>
<template>
    <div>
        <ul class="d-flex list-unstyled overflow-x-auto">
            <li v-for="tag in tags">
                <div class="d-flex justify-content-center align-items-center flex-column">
                    <a :href="tag.id" class="d-flex justify-content-center align-items-center flex-column">
                        <img :src="tag.image" alt=""><br>
                        {{ tag.label }}
                    </a>
                </div>
            </li>
        </ul>

    </div>
</template>
<style scoped>
a {
    color: black;
    text-decoration: none;
    padding: 10px 10px;

    &:hover {
        border-bottom: 3px solid rgb(108, 108, 108);
    }
}

li {
    flex: 0 0 calc(100% / 6);
}

img {
    height: 30px;
    margin: 0 auto;
}

ul {
    scrollbar-width: none;
    /* firefox */
    -ms-overflow-style: none;
    /* Internet Explorer */
}
</style>