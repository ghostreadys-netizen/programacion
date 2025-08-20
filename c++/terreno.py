import bpy

# Eliminar todos los objetos de la escena
bpy.ops.object.select_all(action='SELECT')
bpy.ops.object.delete()

# Crear un terreno
bpy.ops.mesh.primitive_plane_add(size=100, enter_editmode=False, location=(0, 0, 0))
bpy.ops.object.editmode_toggle()
bpy.ops.mesh.subdivide(number_cuts=20)
bpy.ops.object.editmode_toggle()
bpy.ops.object.mode_set(mode='SCULPT')
bpy.ops.sculpt.dynamic_topology_toggle()
bpy.ops.sculpt.sample_detail_size(detail_size=5)

# Agregar turbinas eólicas
for i in range(5):
    x = i * 30 - 50
    y = 0
    z = 5
    bpy.ops.mesh.primitive_cylinder_add(radius=1, depth=20, location=(x, y, z))
    bpy.context.object.rotation_euler[0] = 1.5708  # Rotar 90 grados en X
    bpy.context.object.scale = (1, 1, 0.1)  # Aplastar el cilindro para crear una pala
    bpy.ops.object.duplicate_move(OBJECT_OT_duplicate={"linked":False, "mode":'TRANSLATION'}, 
                                   TRANSFORM_OT_translate={"value":(0, 20, 0)})

# Añadir la estación de control
bpy.ops.mesh.primitive_cube_add(size=10, location=(0, 50, 5))
bpy.ops.object.editmode_toggle()
bpy.ops.mesh.subdivide(number_cuts=3)
bpy.ops.object.editmode_toggle()

# Ajustar la apariencia de la estación de control (opcional)
bpy.context.object.scale[2] = 2

# Cambiar a la vista de cámara
bpy.ops.view3d.object_as_camera()

# Establecer la vista de cámara
bpy.context.scene.camera.location = (0, -50, 30)
bpy.context.scene.camera.rotation_euler = (1.0472, 0, 0)  # Rotar la cámara 60 grados hacia abajo

# Establecer el modo de renderizado
bpy.context.scene.render.engine = 'CYCLES'

# Establecer la iluminación
bpy.context.scene.world.light_settings.use_ambient_occlusion = True
bpy.context.scene.world.light_settings.ao_factor = 0.5
bpy.context.scene.world.light_settings.use_environment_light = True

# Renderizar la escena
bpy.ops.render.render(write_still=True)

blender -b -P mi_script.py
