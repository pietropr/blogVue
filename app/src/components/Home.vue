<template>
  <div id="home">
    <div class="container">
      <h1>Bem vindo ao Portal de Notícias</h1>

      <bloco-noticias></bloco-noticias>
    </div>

  </div>

</template>

<script>
import BlocoNoticias from "./home/BlocoNoticias";
export default {
  name: 'Home',
  components: {BlocoNoticias},
}
</script>
<style>
  h1 {
    margin-bottom: 40px;
  }
</style>
