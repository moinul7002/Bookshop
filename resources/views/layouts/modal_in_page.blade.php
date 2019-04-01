<style>
.container_1 {
  position: relative;
  margin-top: 50px;
  width: 500px;
  height: 300px;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0);
  transition: background 0.5s ease;
}

.container_1:hover .overlay {
  display: block;
  background: rgba(0, 0, 0, .3);
}

img {
  position: absolute;
  width: 500px;
  height: 300px;
  left: 0;
}

.title {
  position: absolute;
  width: 500px;
  left: 0;
  top: 120px;
  font-weight: 700;
  font-size: 30px;
  text-align: center;
  text-transform: uppercase;
  color: white;
  z-index: 1;
  transition: top .5s ease;
}

.container_1:hover .title {
  top: 90px;
}

.button {
  position: absolute;
  width: 500px;
  left:0;
  top: 180px;
  text-align: center;
  opacity: 0;
  transition: opacity .35s ease;
}

.button a {
  width: 200px;
  padding: 12px 48px;
  text-align: center;
  color: white;
  border: solid 2px white;
  z-index: 1;
}

.container_1:hover .button {
  opacity: 1;
}
</style>
