/** @type {import('tailwindcss').Config} */
import typography from "@tailwindcss/typography"

export default {
    content: [
        "./resources/views/layouts/default.blade.php",
        "./resources/views/front/**/*.blade.php",
        "./resources/views/components/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                accent: {
                    '500' : '#E34E14',
                    '700' : '#B6360E',
                },
            },
        },
        transitionTimingFunction: {
            'app-in': 'cubic-bezier(.25,1,.33,1)',
        },
    },
    plugins: [
        typography,
    ],
}

