<template>
  <navBar/>
  <router-view/>
  <Footer/>
</template>

<script>
import navBar from './components/navBar.vue';
import Footer from './components/footer.vue';

export default {
 components:{
  navBar,
  Footer,
 },
 created(){
    this.logout=localStorage.getItem('loggedIn')=='true'
    if(this.logout){
      this.$router.push('/')
    }
  }
}
</script>

<style >
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

nav {
  padding: 30px;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
}

nav a.router-link-exact-active {
  color: #f90000;
}
</style>
