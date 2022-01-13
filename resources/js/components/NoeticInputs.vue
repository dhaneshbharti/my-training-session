<template>
    <div class="w-full">
        <label>{{label}}</label>
        <input v-model="v_model" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg" :type="type" :placeholder="placeholder">
    </div>
</template>

<script>
    export default {
        name: "NoeticInputs",
        props:{
            label: String,
            v_model: String,
            type: String,
            placeholder: String,

        }
    }
</script>

<style scoped>

</style>
