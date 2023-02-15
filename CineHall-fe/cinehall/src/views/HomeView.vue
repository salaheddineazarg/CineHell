<template>
  <section
    class="relative bg-[url(https://images.pexels.com/photos/7991579/pexels-photo-7991579.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2)] bg-cover bg-center bg-no-repeat"
  >
    <div 
      class="absolute inset-0 bg-black/9 sm:bg-transparent-black sm:bg-gradient-to-r sm:from-black/95 sm:to-black/25"
    ></div>

    <div data-aos="fade-up-right"
      class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8"
    >
      <div class="max-w-xl text-center sm:text-left">
        <h1 class="text-3xl text-white font-extrabold sm:text-5xl">
          Let us Watch your

          <strong class="block font-extrabold text-yellow-400">
            Forever Film
          </strong>
        </h1>

        <p class="mt-4 text-slate-300 max-w-lg sm:text-xl sm:leading-relaxed">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt
          illo tenetur fuga ducimus numquam ea!
        </p>

        <div class="mt-8 flex flex-wrap gap-4 text-center">
          <a
            href="#"
            class="block w-full rounded bg-rose-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto"
          >
            Get Started
          </a>

          <a
            href="#"
            class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-rose-600 shadow hover:text-rose-700 focus:outline-none focus:ring active:text-rose-500 sm:w-auto"
          >
            Learn More
          </a>
        </div>
      </div>
    </div>
  </section>

  <div class="container mt-6 mx-auto">
    <div
      class="bg-cover bg-center h-auto text-white py-24 px-10 object-fill bg-[url(https://images.pexels.com/photos/7991158/pexels-photo-7991158.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2)] bg-no-repeat"
    >
      <div data-aos="zoom-in" class="md:w-1/2">
        <p class="font-bold text-sm uppercase">Services</p>
        <p class="text-3xl font-bold">Hello world</p>
        <p class="text-2xl mb-10 leading-none">
          Carousel with TailwindCSS and jQuery
        </p>
        <a
          href="#"
          class="bg-yellow-400 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800"
          >Contact us</a
        >
      </div>
    </div>
    <!-- container -->
  </div>
  <h1 data-aos="zoom-in-right" class="text-4xl font-semibold mt-5 mb-6 lg:text-5xl bg-gradient-to-r from-red-500 to-blue-700 bg-clip-text text-transparent" >
    <span class="bg-gradient-to-r from-yellow-400 to-red-500 bg-clip-text text-transparent">THE BEST </span>
     MOVIES</h1>

  <div class="  mt-4 p-4  flex flex-wrap justify-evenly ">
    <CardMovie data-aos="flip-left"  v-for="card in cards" :id ="card.id" :name_salle="card.name_salle" :name="card.name" :date="card.date" :image="card.image" :id_salle="card.id_salle"/>
  
  </div>

<!-- component -->



<div  data-aos="fade-up"
     data-aos-anchor-placement="top-center" id="contact" class="flex min-h-screen items-center justify-start bg-transparent">
  <div class="mx-auto w-full max-w-lg">
    <h1 class="text-4xl font-medium bg-gradient-to-r from-yellow-400 to-red-500 bg-clip-text text-transparent">Contact us</h1>
    <p class="mt-3">Email us at help@domain.com or message us here:</p>

    <form class="mt-10">
    
    <!-- This is a working contact form. 
         Get your free access key from: https://web3forms.com/  -->

      <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE" /> 
      <div class="grid gap-6 sm:grid-cols-2">
        <div class="relative z-0">
          <input type="text" name="name" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
          <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your name</label>
        </div>
        <div class="relative z-0">
          <input type="text" name="email" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
          <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your email</label>
        </div>
        <div class="relative z-0 col-span-2">
          <textarea name="message" rows="5" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" "></textarea>
          <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your message</label>
        </div>
      </div>
      <button type="submit" class="mt-5 rounded-md bg-yellow-400 px-10 py-2 text-white">Send Message</button>
    </form>
  </div>
</div>
<Ticket/>


</template>

<script>
import CardMovie from "@/components/CardMovie.vue";
import Ticket from "@/components/Ticket.vue";
import axios from "axios";
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init();

export default {
  name: "HomeView",
  data() {
    return {
      cards: [],
    }
  },
  components: {
    CardMovie,
    Ticket
  },
  mounted () {
    axios
      .get('http://localhost/CineHall-be/read/movies')
      .then(response => (this.cards = response.data))
  },
 

};
</script>
