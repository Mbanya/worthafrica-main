import * as THREE from 'three';

function init() {
	const container = document.getElementById( 'slider-three-bg' );
	const swiperEl = document.querySelector( '.mySwiper-banner-two' );
	if ( ! container || ! swiperEl ) return;

	function getSize() {
		const parent = container.parentElement;
		if ( ! parent ) return { width: 800, height: 600 };
		let w = parent.offsetWidth;
		let h = parent.offsetHeight;
		if ( ! w ) w = document.documentElement.clientWidth || 800;
		if ( ! h ) h = 580;
		return { width: w, height: h };
	}

	const size = getSize();
	const scene = new THREE.Scene();
	const camera = new THREE.OrthographicCamera( -2, 2, 2, -2, 0.1, 10 );
	camera.position.z = 2;

	const renderer = new THREE.WebGLRenderer( { antialias: true, alpha: true } );
	renderer.setClearColor( 0x000000, 0 );
	renderer.setPixelRatio( Math.min( window.devicePixelRatio, 2 ) );
	renderer.setSize( size.width, size.height );
	container.appendChild( renderer.domElement );

	let currentMesh = null;
	let currentIndex = -1;
	const prefersReducedMotion = window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;

	function createSceneContent( index ) {
	const configs = [
		{ color: 0xd4a84b, geometry: 'africa' },
		{ color: 0x3C72FC, geometry: 'hex' },
		{ color: 0x5a6b8a, geometry: 'planes' },
		{ color: 0x98D052, geometry: 'stairs' },
		{ color: 0x4a7c59, geometry: 'leaf' }
	];
	const cfg = configs[ index % 5 ];
	const group = new THREE.Group();

	if ( cfg.geometry === 'africa' ) {
		const shape = new THREE.Shape();
		const pts = [[0.18,0.92],[0.12,0.72],[0.08,0.52],[0.12,0.32],[0.22,0.18],[0.38,0.08],[0.55,0.05],[0.72,0.08],[0.88,0.18],[0.95,0.35],[0.92,0.55],[0.82,0.72],[0.68,0.88],[0.48,0.95],[0.32,0.92],[0.22,0.88],[0.18,0.92]];
		const s = 2.2, o = -1.1;
		shape.moveTo( pts[0][0]*s+o, pts[0][1]*s+o );
		for ( let i = 1; i < pts.length; i++ ) shape.lineTo( pts[i][0]*s+o, pts[i][1]*s+o );
		const geom = new THREE.ShapeGeometry( shape );
		const mat = new THREE.MeshBasicMaterial( { color: cfg.color, transparent: true, opacity: 0.35, side: THREE.DoubleSide } );
		const mesh = new THREE.Mesh( geom, mat );
		mesh.rotation.x = - Math.PI / 2;
		mesh.scale.setScalar( 0.5 );
		group.add( mesh );
	} else if ( cfg.geometry === 'hex' ) {
		const geom = new THREE.RingGeometry( 0.10, 0.12, 6 );
		const mat = new THREE.MeshBasicMaterial( { color: cfg.color, transparent: true, opacity: 0.25, side: THREE.DoubleSide } );
		for ( let row = 0; row < 10; row++ ) {
			for ( let col = 0; col < 12; col++ ) {
				const hex = new THREE.Mesh( geom, mat );
				const x = ( col - 6 ) * 0.24;
				const y = ( row - 5 ) * 0.21;
				if ( row % 2 ) hex.position.x += 0.12;
				hex.position.set( x, y, -0.5 );
				hex.rotation.x = - Math.PI / 2;
				group.add( hex );
			}
		}
	} else if ( cfg.geometry === 'planes' ) {
		for ( let i = 0; i < 5; i++ ) {
			const geom = new THREE.PlaneGeometry( 3, 2 );
			const mat = new THREE.MeshBasicMaterial( { color: cfg.color, transparent: true, opacity: 0.12 - i * 0.02, side: THREE.DoubleSide } );
			const plane = new THREE.Mesh( geom, mat );
			plane.position.z = -1 - i * 0.3;
			plane.rotation.x = - Math.PI / 2;
			plane.rotation.z = ( i - 2 ) * 0.08;
			plane.position.x = ( i - 2 ) * 0.15;
			group.add( plane );
		}
	} else if ( cfg.geometry === 'stairs' ) {
		const geom = new THREE.BoxGeometry( 0.4, 0.08, 0.15 );
		const mat = new THREE.MeshBasicMaterial( { color: cfg.color, transparent: true, opacity: 0.3, side: THREE.DoubleSide } );
		for ( let i = 0; i < 8; i++ ) {
			const step = new THREE.Mesh( geom, mat );
			step.position.set( ( i - 4 ) * 0.25, -0.6 + i * 0.08, -0.8 - i * 0.08 );
			step.rotation.x = - Math.PI / 2;
			group.add( step );
		}
	} else {
		const shape = new THREE.Shape();
		shape.moveTo( 0, 0.6 );
		shape.quadraticCurveTo( 0.5, 0.6, 0.4, 0 );
		shape.quadraticCurveTo( 0.15, -0.4, 0, -0.6 );
		shape.quadraticCurveTo( -0.15, -0.4, -0.4, 0 );
		shape.quadraticCurveTo( -0.5, 0.6, 0, 0.6 );
		const geom = new THREE.ShapeGeometry( shape );
		const mat = new THREE.MeshBasicMaterial( { color: cfg.color, transparent: true, opacity: 0.35, side: THREE.DoubleSide } );
		const mesh = new THREE.Mesh( geom, mat );
		mesh.rotation.x = - Math.PI / 2;
		mesh.scale.setScalar( 0.6 );
		mesh.position.z = -0.8;
		group.add( mesh );
	}

	scene.add( group );
	return group;
	}

	function disposeObject( obj ) {
	if ( ! obj ) return;
	if ( obj.geometry ) obj.geometry.dispose();
	if ( obj.material ) {
		if ( Array.isArray( obj.material ) ) obj.material.forEach( m => m.dispose() );
		else obj.material.dispose();
	}
	if ( obj.children && obj.children.length ) obj.children.forEach( disposeObject );
	}

	function setSlide( index ) {
	const realIndex = ( ( index % 5 ) + 5 ) % 5;
	if ( realIndex === currentIndex ) return;
	currentIndex = realIndex;
	if ( currentMesh ) {
		scene.remove( currentMesh );
		disposeObject( currentMesh );
		currentMesh = null;
	}
	currentMesh = createSceneContent( realIndex );
	}

	window.addEventListener( 'resize', () => {
	const s = getSize();
	camera.aspect = s.width / s.height;
	camera.updateProjectionMatrix();
	renderer.setSize( s.width, s.height );
	renderer.setPixelRatio( Math.min( window.devicePixelRatio, 2 ) );
	} );

	container.parentElement.classList.add( 'slider-threejs-active' );
	setSlide( 0 );

	if ( swiperEl.swiper ) {
		setSlide( swiperEl.swiper.realIndex );
		swiperEl.swiper.on( 'slideChange', () => setSlide( swiperEl.swiper.realIndex ) );
	} else {
		const t = setInterval( () => {
			if ( swiperEl.swiper ) {
				clearInterval( t );
				setSlide( swiperEl.swiper.realIndex );
				swiperEl.swiper.on( 'slideChange', () => setSlide( swiperEl.swiper.realIndex ) );
			}
		}, 100 );
		setTimeout( () => clearInterval( t ), 5000 );
	}

	function animate() {
		if ( currentMesh && ! prefersReducedMotion ) currentMesh.rotation.z += 0.002;
		renderer.render( scene, camera );
	}

	renderer.setAnimationLoop( animate );
}

if ( document.readyState === 'loading' ) {
	document.addEventListener( 'DOMContentLoaded', init );
} else {
	init();
}
