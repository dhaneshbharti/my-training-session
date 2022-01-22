<template>
    <div>
        <img scr="/project-assets/images/logo/noetic_logo.png">
    </div>
    <div class="w-full bg-center bg-no-repeat bg-cover h-screen" style="background-color: #F1F1F1" >
        <div class="flex h-full w-full">
            <div class="m-auto">
                <h3 class="text-center text-lg font-semibold mb-5">create your Id here </h3>
                <div class="rounded shadow-lg p-6 bg-gray-50" style="width: 440px;">
                    <form class="w-full max-w-sm" action="add" method="POST">
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label  class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Email
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input v-model="email"  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" >
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                                    Password
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input v-model="password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" placeholder="your password">
                            </div>
                        </div>
                        <div class="md:flex md:items-center">
                            <div class="md:w-1/3"></div>
                            <div class="md:w-2/3">
                                <button @click.prevent="submit" class="shadow bg-blue-500 hover:bg-blue-700-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


</template>

<script>
    export default {
        name: "Userdhanesh",
        data(){
            return{
                email:'',
                password:'',
            }
        },
        methods:{
            submit(){
                const payload ={
                    email: this.email,
                    password: this.password,

                }
                axios.post('/api/employee/create', payload).then(response =>{
                    if(response.status === 200){
                        this.$inertia.get('/user/show');
                    }
                })
            }
        },
        created() {
            console.log(this.page);
            this.employee = this.page.id
            this.email = this.page.email
            this.password = this.page.password

        }
    }

</script>

<style scoped>

</style>
