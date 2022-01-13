<template>
    <div class="w-full">
        <label>{{label}}</label>
        <select name="" id="" class="w-full mt-1.5 px-5 py-2.5 text-sm font-normal text-gray-800 border border-gray-200 rounded-lg">
            <option selected>{{placeholder}}</option>
            <option v-for="(item,index) in dropdown" >{{item.name}}</option>
        </select>
    </div>
</template>

<script>
    export default {
        name: "NoeticSingleSelect",
        props:{
            label:String,
            placeholder:String,
            dropdown:Array,

        }
    }
</script>

<style scoped>

</style>
