<template layout>
    <div>
        <p>this is a home page</p>

        <ul>
            <li v-for="user in users" :key="user.id">
                {{ user.name }} - {{ user.email }}
            </li>
        </ul>
    </div>
</template>

<script setup lang="ts">
defineProps({
    users: {
        default: '',
        type: Object
    }
})

</script>

<style >
* {
    background-color: aliceblue;
}
</style>
