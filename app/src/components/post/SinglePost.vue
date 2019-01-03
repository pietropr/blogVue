<template>
    <div id="single-post" class="container">
        <div class="bloco-postagem">
            <conteudo-post-single :post="this.post"></conteudo-post-single>
        </div>
    </div>
</template>
<script>
    import axios from 'axios';
    import ConteudoPostSingle from "./conteudo-post";
    export default {
        name: 'SinglePost',
        components: {ConteudoPostSingle},
        data() {
            return {
                slug: this.$route.params.slug,
                post: false,
            }
        },
        mounted() {
            axios.get('http://localhost:8000/api/posts/'+ this.slug)
                .then(data => {
                    this.post = data.data
                })
        }
    }
</script>
