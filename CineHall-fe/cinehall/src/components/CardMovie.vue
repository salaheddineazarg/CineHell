<template>
    <router-link  :to="'reservation?id='+id">
    <a href="#" class="group relative block bg-black h-[500px] w-[350px] m-1">
  <img
    alt="Developer"
    :src="image"
    class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50"
  />

  <div class="relative p-8">
    <p class="text-3xl font-black uppercase tracking-widest text-yellow-400">
      {{name}}
    </p>

    <p class="text-2xl font-bold text-white"></p>

    <div class="mt-64">
      <div
        class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
      >
<pre class="text-sm text-yellow-400">
   <i class="fa-solid fa-star "></i>   <i class="fa-solid fa-star"></i>   <i class="fa-solid fa-star"></i>   <i class="fa-regular fa-star-half-stroke"></i>
         
        </pre>
        <p class="text-xl text-white"> {{date}}</p>
      </div>
    </div>
  </div>
</a>
</router-link>
</template> 


<script>

export default{
    name:"cardMovie",
    props: ['id','name','image','date'],
    data(){
      return {
        
      }
    },
   
}
</script>