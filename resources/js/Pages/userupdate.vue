<template>
    <div class="w-full bg-center bg-no-repeat bg-cover h-screen" style="background-color: #F1F1F1">
        <div class="flex h-full w-full" >
            <div class="m-auto">
                <h3 class="text-center text-lg font-semibold mb-5">user form</h3>
                <div class="rounded shadow-lg p-6 bg-gray-50 justify-center " style="width: 440px;">
                    <form class="h-full">
                        <div class="ml-12">
                            <div>
                                <label  >Sr no. </label><br/>
                                <input  class="h-8 rounded" type="text" >
                            </div>
                            <div >
                                <label>Name </label> <br/>
                                <input class="h-8 rounded" type="text">
                            </div>
                            <div >
                                <label >phone</label><br/>
                                <input class="h-8 rounded" type="number" >
                            </div>
                            <div >
                                <label >Emp. id</label><br/>
                                <input class="h-8 rounded" type="number" >
                            </div>
                            <div >
                                <label > designation </label><br/>
                                <input class="h-8 rounded" type="text" >
                            </div>
                            <div >
                                <label>  </label> <br/>
                                <button class="bg-blue-400 ml-12 mt-1 border-solid border-2 border-indigo-600 rounded "> Update</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>su
    </div>
</template>

<script>
    export default {
        name: "user-update"
    }
</script>

<style scoped>

</style>
