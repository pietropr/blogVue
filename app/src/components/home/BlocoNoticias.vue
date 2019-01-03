<template>
    <div id="bloco-posts">
        <article v-for="post in posts">
            <h3>{{post.titulo}}</h3>
            <p>{{post.resumo}}</p>
            <p><span class="autor">Publicado por: </span>{{post.user.name}}</p>
        </article>
    </div>
</template>
<script>
    import axios from 'axios';
    export default {
        name: 'bloco-noticias',
        data() {
            return {
                posts: null
            }
        },
        mounted() {
            axios.get('http://localhost:8000/api/posts')
                .then(data => {
                    this.posts = data.data;
                })
        }
    }
</script>
<style></style>
