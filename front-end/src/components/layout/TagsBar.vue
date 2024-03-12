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
                <a :href="tag.id">{{ tag.label }}</a>
            </li>
        </ul>

    </div>
</template>
<style scoped>
li {
    margin: 0 20px;
}
</style>