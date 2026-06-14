import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Navlight } from './navlight';

describe('Navlight', () => {
  let component: Navlight;
  let fixture: ComponentFixture<Navlight>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Navlight]
    })
    .compileComponents();

    fixture = TestBed.createComponent(Navlight);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
