<template>
    <div>
        <v-app>
            <v-system-bar>
                <!-- system bar -->
            </v-system-bar>

            <v-app-bar app>
                <!-- top bar -->
            </v-app-bar>

            <v-navigation-drawer app>
                <!-- side bar -->
            </v-navigation-drawer>
            <!-- Sizes your content based upon application components -->
            <v-content>

                <!-- Provides the application the proper gutter -->
                <v-container fluid>


                    <!-- Navigation -->
                    <v-card style="height: 2500px">
                        TEST CONTENT

                    </v-card>
<!--                    <router-view></router-view>-->
                </v-container>
            </v-content>
            <v-footer app>
                <!-- -->
            </v-footer>

            <v-bottom-navigation
                hide-on-scroll
                absolute
                horizontal
                style="position: fixed"
            >
                <!--            scroll-target="#scroll-area-1"-->


                <v-btn text
                       color="orange accent-4"
                       to="stores"
                >
                    <span>test</span>
                </v-btn>

                <v-btn text
                       color="orange accent-4"
                       to="cravings"
                >
                    <span>test2</span>
                </v-btn>

                <v-btn text color="orange accent-4"
                       to="cart"
                       class="cartIcon"
                >
                    <span>test3</span>
                </v-btn>
            </v-bottom-navigation>
        </v-app>
    </div>
</template>
<script>
    export default {

    }
</script>
