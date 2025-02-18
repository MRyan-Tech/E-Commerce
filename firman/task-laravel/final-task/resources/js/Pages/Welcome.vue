<script setup>
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById("screenshot-container")?.classList.add("!hidden");
    document.getElementById("docs-card")?.classList.add("!row-span-1");
    document.getElementById("docs-card-content")?.classList.add("!flex-row");
    document.getElementById("background")?.classList.add("!hidden");
}

const tiers = [
  {
    name: 'Hobby',
    id: 'tier-hobby',
    href: '#',
    priceMonthly: '$29',
    description: "The perfect plan if you're just getting started with our product.",
    features: ['25 products', 'Up to 10,000 subscribers', 'Advanced analytics', '24-hour support response time'],
    featured: false,
  },
  {
    name: 'Enterprise',
    id: 'tier-enterprise',
    href: '#',
    priceMonthly: '$99',
    description: 'Dedicated support and infrastructure for your company.',
    features: [
      'Unlimited products',
      'Unlimited subscribers',
      'Advanced analytics',
      'Dedicated support representative',
      'Marketing automations',
      'Custom integrations',
    ],
    featured: true,
  },
]
</script>

<template>
    <Head title="Welcome" />
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <!-- <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" /> -->
        <div
            class="position-relative d-flex flex-col selection:bg-[#FF2D20] selection:text-white"
        >
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header
                    class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3"
                >
                    <div class="flex">
                        <h1 class="text-2xl font-extrabold">MamanShop</h1>
                    </div>
                    <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-end">
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </Link>

                        <template v-else>
                            <Link
                                :href="route('login')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Log in
                            </Link>

                            <Link
                                v-if="canRegister"
                                :href="route('register')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </Link>
                        </template>
                    </nav>
                </header>

                <main class="mt-6">
                    <p class="flex text-2xl font-extrabold justify-center">
                        HALAMAN DASHBOARD SEBELUM LOGIN
                    </p>
                    <button type="button" class="btn btn-primary">Primary</button>
                    <div
                        class="relative isolate bg-white px-6 py-24 sm:py-32 lg:px-8"
                    >
                        <div
                            class="absolute inset-x-0 -top-3 -z-10 transform-gpu overflow-hidden px-36 blur-3xl"
                            aria-hidden="true"
                        >
                            <div
                                class="mx-auto aspect-1155/678 w-[72.1875rem] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
                                style="
                                    clip-path: polygon(
                                        74.1% 44.1%,
                                        100% 61.6%,
                                        97.5% 26.9%,
                                        85.5% 0.1%,
                                        80.7% 2%,
                                        72.5% 32.5%,
                                        60.2% 62.4%,
                                        52.4% 68.1%,
                                        47.5% 58.3%,
                                        45.2% 34.5%,
                                        27.5% 76.7%,
                                        0.1% 64.9%,
                                        17.9% 100%,
                                        27.6% 76.8%,
                                        76.1% 97.7%,
                                        74.1% 44.1%
                                    );
                                "
                            />
                        </div>
                        <div class="mx-auto max-w-4xl text-center">
                            <h2
                                class="text-base/7 font-semibold text-indigo-600"
                            >
                                Pricing
                            </h2>
                            <p
                                class="mt-2 text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-6xl"
                            >
                                Choose the right plan for you
                            </p>
                        </div>
                        <p
                            class="mx-auto mt-6 max-w-2xl text-center text-lg font-medium text-pretty text-gray-600 sm:text-xl/8"
                        >
                            Choose an affordable plan that’s packed with the
                            best features for engaging your audience, creating
                            customer loyalty, and driving sales.
                        </p>
                        <div
                            class="mx-auto mt-16 grid max-w-lg grid-cols-1 items-center gap-y-6 sm:mt-20 sm:gap-y-0 lg:max-w-4xl lg:grid-cols-2"
                        >
                            <div
                                v-for="(tier, tierIdx) in tiers"
                                :key="tier.id"
                                :class="[
                                    tier.featured
                                        ? 'relative bg-gray-900 shadow-2xl'
                                        : 'bg-white/60 sm:mx-8 lg:mx-0',
                                    tier.featured
                                        ? ''
                                        : tierIdx === 0
                                        ? 'rounded-t-3xl sm:rounded-b-none lg:rounded-tr-none lg:rounded-bl-3xl'
                                        : 'sm:rounded-t-none lg:rounded-tr-3xl lg:rounded-bl-none',
                                    'rounded-3xl p-8 ring-1 ring-gray-900/10 sm:p-10',
                                ]"
                            >
                                <h3
                                    :id="tier.id"
                                    :class="[
                                        tier.featured
                                            ? 'text-indigo-400'
                                            : 'text-indigo-600',
                                        'text-base/7 font-semibold',
                                    ]"
                                >
                                    {{ tier.name }}
                                </h3>
                                <p class="mt-4 flex items-baseline gap-x-2">
                                    <span
                                        :class="[
                                            tier.featured
                                                ? 'text-white'
                                                : 'text-gray-900',
                                            'text-5xl font-semibold tracking-tight',
                                        ]"
                                        >{{ tier.priceMonthly }}</span
                                    >
                                    <span
                                        :class="[
                                            tier.featured
                                                ? 'text-gray-400'
                                                : 'text-gray-500',
                                            'text-base',
                                        ]"
                                        >/month</span
                                    >
                                </p>
                                <p
                                    :class="[
                                        tier.featured
                                            ? 'text-gray-300'
                                            : 'text-gray-600',
                                        'mt-6 text-base/7',
                                    ]"
                                >
                                    {{ tier.description }}
                                </p>
                                <ul
                                    role="list"
                                    :class="[
                                        tier.featured
                                            ? 'text-gray-300'
                                            : 'text-gray-600',
                                        'mt-8 space-y-3 text-sm/6 sm:mt-10',
                                    ]"
                                >
                                    <li
                                        v-for="feature in tier.features"
                                        :key="feature"
                                        class="flex gap-x-3"
                                    >
                                        <CheckIcon
                                            :class="[
                                                tier.featured
                                                    ? 'text-indigo-400'
                                                    : 'text-indigo-600',
                                                'h-6 w-5 flex-none',
                                            ]"
                                            aria-hidden="true"
                                        />
                                        {{ feature }}
                                    </li>
                                </ul>
                                <a
                                    :href="tier.href"
                                    :aria-describedby="tier.id"
                                    :class="[
                                        tier.featured
                                            ? 'bg-indigo-500 text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-indigo-500'
                                            : 'text-indigo-600 ring-1 ring-indigo-200 ring-inset hover:ring-indigo-300 focus-visible:outline-indigo-600',
                                        'mt-8 block rounded-md px-3.5 py-2.5 text-center text-sm font-semibold focus-visible:outline-2 focus-visible:outline-offset-2 sm:mt-10',
                                    ]"
                                    >Get started today</a
                                >
                            </div>
                        </div>
                    </div>
                </main>

                <footer
                    class="py-16 text-center text-sm text-black dark:text-white/70"
                >
                    &copy; mamanshop 2025
                </footer>
            </div>
        </div>
    </div>
</template>
