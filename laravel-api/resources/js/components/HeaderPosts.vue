<template>
  <header>
      
      <router-link :to="{ name: 'home' }" class="router-link"> HOME </router-link>

      <router-link :to="{ name: 'postIndex' }" class="router-link"> BLOG </router-link>

      <router-link :to="{ name: 'about' }" class="router-link"> ABOUT </router-link>

  </header>
</template>

<script>
export default {
    name: 'HeaderPosts',
}
</script>

<style lang="scss" scoped>

header {
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
}
.router-link {
  margin: 15px;
  text-decoration: none;
  font-weight: bold;
  font-size: 25px;
  color: rgb(0, 123, 255);
}
.router-link:hover {
  color: rgb(0, 0, 187);
}
</style>