<template>
  <div class="w-full bg-center bg-no-repeat bg-cover h-screen" style="background-color: #F1F1F1">
    <div class="flex h-full w-full" >
        <div class="m-auto">
        <h3 class="text-center text-lg font-semibold mb-5">user form</h3>
            <div class="rounded shadow-lg p-6 bg-gray-50" style="width: 440px;">
              <form class="h-full">
                  <div >
                    <div>
                      <label  >Roll.no. </label><br/>
                           <input v-model="roll_number"  class="w-full rounded " type="number"  placeholder="enter your Sr.no. ">
                    </div>
                    <div class="mt-1">
                      <label  >Student name</label><br/>
                      <input  v-model="student_name" class="w-full rounded" type="text" placeholder="enter your name" >
                    </div>
                    <div class="mt-1">
                      <label  >Father's name </label><br/>
                      <input  v-model="father_name" class="w-full rounded" type="text" placeholder="enter father's name" >
                    </div>
                    <div class="mt-1">
                      <label>class </label> <br/>
                          <input v-model="standard" class="w-full rounded" type="number" placeholder=" enter your class">
                    </div>
                    <div class="mt-1">
                      <label >phone</label><br/>
                          <input  v-model="phone_number" class="w-full rounded" type="number" placeholder="enter your phone" >
                    </div>
                    <div class="mt-1">
                      <label >Address</label><br/>
                        <input  v-model="address" class="w-full rounded" type="text" placeholder="enter your phone" >

                    </div>
                    <div class="mt-1" >
                      <label > gender </label><br/>
                           <select v-model="gender" class="w-full rounded" >
                               <option selected value="">select</option>
                               <option value="M">male</option>
                               <option value="F" >female</option>
                           </select>
                    </div>
                    <div class="mt-1 text-center ">
                      <label>  </label> <br/>
                        <button @click.prevent="submit" class="bg-blue-400 mt-1 border-solid border-2 border-indigo-600 rounded ">Submit</button>
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
        name: "UserCreate",
        data(){
            return{
                roll_number:'',
                student_name:'',
                father_name:'',
                standard:'',
                phone_number:'',
                address:'',
                gender:'',
            }
        },
        methods:{
            submit(){
                const payload ={
                    roll_number: this.roll_number,
                    student_name: this.student_name,
                    father_name: this.father_name,
                    class: this.standard,
                    phone_number: this.phone_number,
                    address: this.address,
                    gender: this.gender,
                }
                console.log('Check');
               axios.post('/api/student/create', payload).then(response =>{
                   if(response.status === 200){
                       this.$inertia.get('/user/list');
                   }
               })
            }
        }
    }
</script>

<style scoped>

</style>
