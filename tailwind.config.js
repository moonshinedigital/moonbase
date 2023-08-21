/* eslint-env node */
/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
	content: ['./src/**/*.{html,js,php}', './theme/**/*.{html,js,php}'],
	theme: {
		colors: {
			black: '#1C2321',
			white: '#FBFBFC',
			grey: '#A9B4C2',
			purple: '#6610F2',
			yellow: '#F8BA12',
			orange: '#FF331F',
		},
		extend: {
			fontFamily: {
				sans: ['Poppins', ...defaultTheme.fontFamily.sans],
				display: ['Montserrat', ...defaultTheme.fontFamily.sans],
			},
			plugins: [],
		},
	},
}
