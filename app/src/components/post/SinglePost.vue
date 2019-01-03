<template>
    <div id="single-post" class="body-light">
        <div class="bloco-postagem">
            <conteudo-post-single :post="this.post"></conteudo-post-single>
            <button v-on:click="alteraModo" class="light">Modo noturno</button>
        </div>
    </div>
</template>
<script>
    import axios from 'axios';
    import ConteudoPostSingle from "./conteudo-post";
    import JQuery from 'jquery'
    let $ = JQuery;

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
        },
        methods: {
            alteraModo() {
                $('#single-post').toggleClass('body-light');
                $('#single-post').toggleClass('body-dark');

                $('button').toggleClass("light");
                $('button').toggleClass("dark");
            }
        }
    }
</script>
<style>

    .body-dark {
        transition: 0.3s all;
        background: #1b1b25;
        color: #fff !important;
    }

    .body-light {
        transition: 0.3s all;
        background: white;
        color: black !important;
    }

    .dark {
        transition: 0.3s all;
        position: fixed;
        bottom: 0;
        right: 0;
        background: #fff;
        color: #000;
        padding: 5px 20px;
    }
    .light {
        transition: 0.3s all;
        position: fixed;
        bottom: 0;
        right: 0;
        background: #000;
        color: #fff;
        padding: 5px 20px;
    }
</style>
