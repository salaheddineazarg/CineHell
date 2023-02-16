<template>
  <div class="">
    <!-- component -->
    <div class="container mx-auto">
      <div class="flex justify-center px-6 my-12">
        <!-- Row -->
        <div class="w-full xl:w-3/4 lg:w-11/12 flex">
          <!-- Col -->
          <div data-aos="fade-right"
            class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
            style="
              background-image: url('https://images.pexels.com/photos/7991378/pexels-photo-7991378.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
            "
          ></div>
          <!-- Col -->
          <div  data-aos="fade-left"
            class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none"
          >
            <h3 class="pt-4 text-2xl text-center">Login</h3>
            <form
              @submit.prevent="submitForm"
              class="px-8 pt-6 pb-8 mb-4 bg-white rounded"
            >
              <div class="mb-4 md:mr-2 md:mb-0">
                <label
                  class="block mb-2 text-sm font-bold text-gray-700"
                  for="firstName"
                >
                  Token
                </label>
                <input
                  class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  id="text"
                  type="text"
                  placeholder="Token"
                  v-model="Token"
                  name="token"
                />
              </div>

              <div class="mb-4">
                <label
                  class="block mb-2 text-sm font-bold text-gray-700"
                  for="text"
                >
                  Full name
                </label>
                <input
                  class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  id="email"
                  type="text"
                  placeholder="Full name"
                />
              </div>

              <div class="mb-6 text-center">
                <button
                  class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                  type="submit"
                >
                  Login
                </button>
              </div>
              <hr class="mb-6 border-t" />
              <div class="text-center">
                <a
                  class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                  href="#"
                >
                  Forgot Password?
                </a>
              </div>
              <div class="text-center">
                <router-link to="/Register">
                  Already have an account? Register!
                </router-link>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Swal from "sweetalert2";
import axios from "axios";
export default {
  data() {
    return {
      Token: "",
    };
  },
  methods: {
    async submitForm() {
    
      let form_login = new FormData();
      form_login.append("token",this.Token);

      const response = await axios.post(
        "http://localhost/CineHall-be/login/check",
        form_login
      );

    
      if (response.data) {
        console.log(response.data);
         this.$router.push("/");
        window.location.reload();
        localStorage.setItem("user",JSON.stringify(response.data));
        localStorage.setItem("loggedIn", true);

        Swal.fire({
          position: "top-end",
          icon: "success",
          title: "Successfully Login",
          showConfirmButton: false,
          timer: 1500,
        });
        
       
      
      } else {
        
        console.log(response.data.message);
        Swal.fire("Your token or Fullname is not correct");
        this.$router.push("/Login");
      }
    },
  },
};
</script>
