import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Navdark } from './navdark';

describe('Navdark', () => {
  let component: Navdark;
  let fixture: ComponentFixture<Navdark>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Navdark]
    })
    .compileComponents();

    fixture = TestBed.createComponent(Navdark);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
