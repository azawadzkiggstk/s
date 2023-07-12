export function Website( props ) {
	return (
		<svg
			xmlns="http://www.w3.org/2000/svg"
			width="32"
			height="32"
			{ ...props }
		>
			<path d="M16 0C7.163 0 0 7.163 0 16s7.163 16 16 16 16-7.163 16-16S24.837 0 16 0zm0 30c-1.967 0-3.84-.407-5.538-1.139l7.286-8.197a.998.998 0 0 0 .253-.664v-3a1 1 0 0 0-1-1c-3.531 0-7.256-3.671-7.293-3.707A1 1 0 0 0 9.001 12h-4a1 1 0 0 0-1 1v6c0 .379.214.725.553.894l3.447 1.724v5.871c-3.627-2.53-6-6.732-6-11.489 0-2.147.484-4.181 1.348-6h3.652c.265 0 .52-.105.707-.293l4-4A1 1 0 0 0 12.001 5V2.581a14.013 14.013 0 0 1 4-.581c2.2 0 4.281.508 6.134 1.412A5.961 5.961 0 0 0 20.002 8c0 1.603.624 3.109 1.757 4.243a5.985 5.985 0 0 0 4.536 1.751c.432 1.619 1.211 5.833-.263 11.635a.936.936 0 0 0-.026.163A13.956 13.956 0 0 1 16.002 30z" />
		</svg>
	);
}
