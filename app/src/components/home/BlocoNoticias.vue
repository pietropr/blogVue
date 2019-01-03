<template>
    <div id="bloco-posts">
        <article v-for="post in posts">
            <img :src="post.img_destacada">
            <div class="info">
                <p><span class="autor float-left">Publicado por: </span>{{post.user.name}}<span class="float-right">{{formatDate(post.created_at)}}</span></p>
            </div>

            <h3>{{post.titulo}}</h3>
            <p>{{post.resumo}}</p>

        </article>
    </div>
</template>
<script>
    import moment from 'moment';
    import axios from 'axios';


    export default {
        name: 'bloco-noticias',
        data() {
            return {
                posts: null
            }
        },

        methods: {
            formatDate(value) {
                if (value) {
                    return moment(String(value)).format('DD/MM/YYYY HH:mm')
                }
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
<style lang="scss">

    article {
        width: 50%;
        img {
            width: 100%;
        }
    }

</style>
