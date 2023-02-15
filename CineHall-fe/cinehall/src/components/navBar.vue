<template>
<header class="bg-yellow-400 text-white shadow-lg md:block">
  <div class="container mx-auto flex max-sm:flex max-sm:justify-between md:jusjustify-between    items-center h-24">
    <a href="" class="flex items-center justify-center">
      <img class="h-16" src="../assets/logo.png" alt="" />
      <span class="ml-4 uppercase font-black">cinema<br/>booking</span>
    </a>
   
    <nav class="contents  font-semibold text-base lg:text-lg">
      <ul  class="mx-auto flex justify-center max-sm:hidden items-center " :class="{'toggle':toggle}" >
        <li class="p-5 xl:p-8 active">
            <router-link to="/"  @click=" menuToggle" >Home</router-link>
        </li>
     
      
        <li class="p-5 xl:p-8">
            <router-link to="/Register"  @click=" menuToggle" >Register</router-link>
        </li>  
        <li class="p-5 xl:p-8">
         <router-link to="/Login"  @click=" menuToggle" >Login</router-link>
        </li>
      </ul>
    </nav>
    <button v-if="!logout"   @click="scrollToElemenet" class="border border-white rounded-full font-bold px-8 py-2">Contact me</button>
    <button @click="logoutClear" v-if="logout" class="border border-white rounded-full font-bold px-8 py-2">logout</button>
     <span @click=" menuToggle" class="md:hidden">
      <img src="https://www.corporate.rmaassurance.com/sites/all/themes/corporate_uix/assets/images/icone-menu.png" alt="">
     </span>
    
  </div>
</header>
</template>

<style>

  @media (max-width: 760px) {
    
  .toggle {
  display: flex !important;
  flex-direction: column;
  position: absolute;
  top: 17%;
  left: 0;
  width: 100%;
  z-index: 1;
  background-color: #FACC15;
  transition: 10s ease-in;
 

      }
  }
</style>


<script>

export default {
  name : "navBar",
  data(){

   return{
    logout:"",
    toggle:false,
   }

  },
   created(){
    this.logout=localStorage.getItem('loggedIn')=='true'
   },
   methods: {
    logoutClear() {
      this.logout == 'false'
       window.location.reload();
     localStorage.clear();
     
    
    },
   scrollToElemenet() {
    window.location.hash='contact';
   } ,
   menuToggle() {
    this.toggle = !this.toggle;

   }
  
   },
}


</script>