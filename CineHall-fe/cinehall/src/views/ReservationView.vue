<template v-if="checkLoging">
  <div class="h-screen max-sm:h-screen items-center">
    <section
      class="w-full h-screen bg-cover bg-center py-4"
      :style="{ backgroundImage: 'url(' + cover + ')'}"
      
    >
      <h1
        class="text-4xl font-semibold mt-5 mb-6 lg:text-5xl bg-gradient-to-r from-yellow-400 to-red-500 bg-clip-text text-transparent"
      >
        The Salle is : {{cards.name_salle}}
      </h1>
      <!-- component -->

      <div class="flex flex-row-reverse  flex-wrap">
        <div
          class="order-1 flex flex-col justify-between bg-cover bg-center bg-no-repeatspace-y-2 rounded-lg w-[250px] shadow-only transition-ease px-6 py-4"
          :style="{ backgroundImage: 'url(' + cards.image + ')'}"
        >
          <h3 class="mb-3 font-bold text-3xl font-black uppercase tracking-widest text-yellow-400 ">
            {{cards.name}}
          </h3>
          <b class="pb-4 text-sm text-gray-100">
            {{cards.date}}
          </b>
          
       
        </div>

        <!-- ---------------------------- -->
        <div
          class="bg-black flex justify-around flex-col mx-auto w-[60%] h-[370px]"
        >
          <img
            class="mx-auto"
            src="https://pixner.net/boleto/demo/assets/images/movie/screen-thumb.png"
            alt=""
          />
          <div
            class="container grid grid-cols-8 justify-items-center text-center text-white"
          >
            <seat
              @click="booking(seat)"
              :reserved="reserved.includes(seat)"
              v-for="seat in 40"
              :key="seat"
            />
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import axios from "axios";
import CardMovie from "@/components/CardMovie.vue";
import seat from "@/components/seatBooking.vue";
import Swal from "sweetalert2";

export default {
  name: "Reservation",
  data() {
    return {
      cards: [],
      reserved: [],
      place: "",
      cover:'https://pixner.net/boleto/demo/assets/images/banner/banner04.jpg'
      
    };
  },
  components: {
    CardMovie,
    seat,
  },

  props: {
    id: {
      type: String,
      default: null,
    },
  },
 async mounted() {
     axios
      .get("http://localhost/CineHall-be/read/movie/" + this.id)
      .then((response) => (this.cards = response.data));

      axios
      .get(
        "http://localhost/CineHall-be/read/reservation/"+this.id)
      .then((response) => (this.reserved = response.data));


  },
  created(){
          if(!(localStorage.getItem("user"))){
            Swal.fire("You Should Login First");
           this.$router.push('/Login')
          }
  },



  methods: {
    booking(seat) {
  
      this.place = seat;
      Swal.fire({
        title: "Do you want to save the reserved ?",
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: "Save",
        denyButtonText: `Don't save`,
      }).then((result) => {
        if (result.isConfirmed) {
          this.reserved.push(seat);

          var client = JSON.parse(localStorage.getItem("user")).data;
          let form_reserv = new FormData();
          form_reserv.append("client", client.id);
          form_reserv.append("movie", this.id);
          form_reserv.append("seat_number", seat);

          const response = axios.post(
            "http://localhost/CineHall-be/create/token",
            form_reserv
          );

          Swal.fire("Your reservation is done");
          this.getReservation();
          // this.$router.push("/");
        } else if (result.isDenied) {
          Swal.fire("Changes are not saved", "", "info");
        }
      });
    },
  },
  

   
    
 

};
</script>
