#include <QApplication>
#include <QMainWindow>
#include <QVBoxLayout>
#include <QHBoxLayout>
#include <QLabel>
#include <QLineEdit>
#include <QPushButton>

int main(int argc, char *argv[]) {
    QApplication app(argc, argv);

    QMainWindow window;
    window.setWindowTitle("Cajero Automático");

    QWidget *centralWidget = new QWidget(&window);
    window.setCentralWidget(centralWidget);

    QVBoxLayout *layout = new QVBoxLayout(centralWidget);

    QLabel *titleLabel = new QLabel("Bienvenido al Cajero Automático");
    titleLabel->setAlignment(Qt::AlignCenter);
    layout->addWidget(titleLabel);

    QLabel *instructionLabel = new QLabel("Ingrese la cantidad a retirar:");
    instructionLabel->setAlignment(Qt::AlignCenter);
    layout->addWidget(instructionLabel);

    QLineEdit *amountLineEdit = new QLineEdit;
    amountLineEdit->setAlignment(Qt::AlignCenter);
    layout->addWidget(amountLineEdit);

    QHBoxLayout *buttonLayout = new QHBoxLayout;

    QPushButton *withdrawButton = new QPushButton("Retirar");
    buttonLayout->addWidget(withdrawButton);

    QPushButton *exitButton = new QPushButton("Salir");
    buttonLayout->addWidget(exitButton);

    layout->addLayout(buttonLayout);

    window.show();

    return app.exec();
}
