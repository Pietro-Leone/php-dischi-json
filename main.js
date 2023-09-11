"use script"

Vue.createApp({
  data() {
    return {
      posts: []
    }
  },
  mounted() {
    axios.get("api/posts.php").then((response) => {
      this.posts = response.data;
    })
  }
}).mount("#app");